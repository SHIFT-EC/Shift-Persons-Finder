<?php

namespace Spf\Shift\Repositories;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Spf\Shift\Entities\Missing;
use Spf\User;

class MissingRepository extends BaseRepo
{
    /**
     * @return Missing
     */
    public function getModel()
    {
        return new Missing();
    }

    /**
     * Create missing
     *
     * @param $request
     * @return mixed
     */
    public function createMissing($request)
    {
        $missing = new Missing();

        $photo = $request->photo;
        $extension = $photo->getClientOriginalExtension();
        $fileName = time() . '-'. rand(100, 10000) .'.'.$extension;
        Storage::disk('public')->put('/uploads/' . $fileName, File::get($photo));

        $missing->fill($request->all());
        $missing->status = 'Desaparecido';
        $missing->photo = $fileName;

        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_nameR;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->policy = $request->policy ? 1 : 0;

        $user->save();
        $user->missings()->save($missing);

        return Flash::success('El registro se creó correctamente!');
    }
}