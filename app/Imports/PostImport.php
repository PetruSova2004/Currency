<?php

namespace App\Imports;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class PostImport implements ToModel, WithValidation
{
    private User $user;
    public function __construct($id)
    {
        $this->user = User::find($id);
    }

    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'title' => $row[0],
            'description' => $row[1],
            'user_id' => $this->user->id,
        ]);
    }


public function rules(): array
{
    return [
        '0' => [
            'required',
            'string',
            'min:3',
            'max:255',
        ],
        '1' => [
            'required',
            'string',
            'min:3',
            'max:255',
        ]
    ];

}
}
