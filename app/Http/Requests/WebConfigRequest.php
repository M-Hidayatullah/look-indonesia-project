<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

     public function authorize(): bool
     {
         return true;
     }

    public function rules(): array
    {
        switch($this->method()) {
            case 'POST' : {
                return [
                    'domain_web' => ['required'],
                    'link_instagram' => ['string'],
                    'link_facebook' => ['string'],
                    'link_youtube' => ['string'],
                    'linktree' => ['string'],
                    'link_twitter' => ['string'],
                    'alamat' => ['string'],
                    'no_telp' => ['string'],
                    'no_wa_booking' => ['string'],
                    'about_company' => ['string'],
                    'name_company' => ['string'],
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'domain_web' => ['required'],
                    'link_instagram' => ['string'],
                    'link_facebook' => ['string'],
                    'link_youtube' => ['string'],
                    'linktree' => ['string'],
                    'link_twitter' => ['string'],
                    'alamat' => ['string'],
                    'no_telp' => ['string'],
                    'no_wa_booking' => ['string'],
                    'about_company' => ['string'],
                    'name_company' => ['string'],
                ];
            }
        }
    }
}
