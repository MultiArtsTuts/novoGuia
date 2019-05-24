<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'	=>	'bail|required',
			'categories_id'	=>	'required',
			'bairros_id'	=>	'required',
			'description'	=> 'required',
			'postalcode'	=> 'required',
			'address'	=>	'required',
			'email'	=>	'required|unique:clients,email',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
		];
	}

	public function messages()
	{
		return [
			'name.required'=>'O nome é obrigatório.',
			'image.required'=>'Uma imagem é obrigatória',
			'categories_id.required'	=>	'A categoria é obrigatória.',
			'bairros_id.required'	=>	'O Bairro é obrigatório.',
			'postalcode.required'	=>	'O CEP é obrigatório.',
			'address.required'	=>	'O endereço é obrigatório.',
			'email.required'	=>	'O email é obrigatório.',
			'email.unique'	=> 'E-mail já cadastrado',
			'description.required'	=>	'Faça uma descrição sobre seu negócio.',
			'image.required'	=>	'Selecione ao menos uma imagem.',
		];
	}
}
