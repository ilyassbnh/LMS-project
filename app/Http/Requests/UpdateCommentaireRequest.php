<?php

namespace App\Http\Requests;

use App\Models\Commentaire;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommentaireRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commentaire_edit');
    }

    public function rules()
    {
        return [
            'lecon_id' => [
                'required',
                'integer',
            ],
            'utilisateur_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
