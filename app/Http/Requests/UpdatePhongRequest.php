<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhongRequest extends FormRequest
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

    public function rules()
    {
        return [
            'id'            => 'required|exists:phongs,id',
            'ten_phong'     => 'required|unique:phongs,ten_phong,' . $this->id,
            'tinh_trang'    => 'required|numeric|between:0,1',
            'hang_doc'      => 'required|numeric|min:6|max:12',
            'hang_ngang'    => 'required|numeric|min:6|max:12'
        ];
    }

    public function messages()
    {
        return [
            'id.*'                  =>  'Phòng chiếu này không tồn tại!',
            'ten_phong.required'    => 'Tên Phòng không được để trống',
            'ten_phong.unique'      => 'Tên Phòng đã tồn tại',
            'tinh_trang.*'          => 'Tình trạng phải chọn đúng theo yêu cầu',
            'hang_doc.*'            => 'Số ghế hàng dọc phải là một số lớn hơn 5 và nhỏ hơn 13',
            'hang_ngang.*'          => 'Số ghế hàng ngang phải là một số lớn hơn 5 và nhỏ hơn 13'
        ];
    }
}
