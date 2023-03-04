<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'Final Words',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function view($note_id = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest($note_id);

        if (empty($data['guest'])) {
            throw new PageNotFoundException('This person does not exist: ' . $note_id);
        }

        $data['title'] = $data['guest']['name'];

        return view('templates/header', $data)
            . view('guest/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Any Last Words?'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'website', 'note', 'organ']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[200]|min_length[3]',
            'email' => 'required|max_length[200]|min_length[3]',
            'website' => 'required|max_length[200]|min_length[3]',
            'note' => 'required|max_length[1000]|min_length[3]',
            'organ' => 'required|max_length[200]|min_length[3]'

        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Any Last Words?'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'note'  => $post['note'],
            'organ'  => $post['organ'],
        ]);

        return view('templates/header', ['title' => 'It is Done.'])
            . view('guest/success')
            . view('templates/footer');
    }
}