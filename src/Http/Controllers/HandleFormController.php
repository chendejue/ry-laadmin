<?php

namespace RuiYi\LaAdmin\Http\Controllers;

use RuiYi\LaAdmin\Exception\AdminException;
use RuiYi\LaAdmin\Form\Field\Embeds;
use RuiYi\LaAdmin\Form\Field\File;
use RuiYi\LaAdmin\Form\Field\HasMany;
use RuiYi\LaAdmin\Http\JsonResponse;
use RuiYi\LaAdmin\Traits\HasUploadedFile;
use RuiYi\LaAdmin\Widgets\Form;
use Illuminate\Http\Request;

class HandleFormController
{
    use HasUploadedFile;

    public function handle(Request $request)
    {
        $form = $this->resolveForm($request);

        if (! $form->passesAuthorization()) {
            return $form->failedAuthorization();
        }

        $form->form();

        if ($errors = $form->validate($request)) {
            return $form->validationErrorsResponse($errors);
        }

        $input = $form->sanitize($request->all());

        return $this->sendResponse($form->handle($input));
    }

    public function uploadFile(Request $request)
    {
        $form = $this->resolveForm($request);

        $form->form();

        return $this->getField($request, $form)->upload($this->file());
    }

    /**
     * @param  Request  $request
     * @param $form
     * @return File
     */
    protected function getField(Request $request, $form)
    {
        $column = $this->uploader()->upload_column ?: $request->get('_column');

        if (! $relation = $request->get('_relation')) {
            return $form->field($column);
        }

        $relation = is_array($relation) ? current($relation) : $relation;

        $relationField = $form->field($relation);

        if (! $relationField) {
            return;
        }

        if ($relationField instanceof HasMany) {
            return $relationField->buildNestedForm()->field($column);
        }
        if ($relationField instanceof Embeds) {
            return $relationField->field($column);
        }
    }

    public function destroyFile(Request $request)
    {
        $form = $this->resolveForm($request);

        $form->form();

        $field = $this->getField($request, $form);

        $field->deleteFile($request->key);

        return $this->responseDeleted();
    }

    /**
     * @param  Request  $request
     * @return Form
     *
     * @throws AdminException
     */
    protected function resolveForm(Request $request)
    {
        if (! $request->has(Form::REQUEST_NAME)) {
            throw new AdminException('Invalid form request.');
        }

        $formClass = $request->get(Form::REQUEST_NAME);

        if (! class_exists($formClass)) {
            throw new AdminException("Form [{$formClass}] does not exist.");
        }

        /** @var Form $form */
        $form = app($formClass);

        if (! method_exists($form, 'handle')) {
            throw new AdminException("Form method {$formClass}::handle() does not exist.");
        }

        return $form;
    }

    protected function sendResponse($response)
    {
        if ($response instanceof JsonResponse) {
            return $response->send();
        }

        return $response;
    }
}
