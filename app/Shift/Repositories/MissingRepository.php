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

        if($request->photo) {
            $photo = $request->photo;
            $extension = $photo->getClientOriginalExtension();
            $fileName = time() . '-'. rand(100, 10000) .'.'.$extension;
            Storage::disk('local')->put($fileName, File::get($photo));
        } else {
            $fileName = 'avatar.jpg';
        }

        $missing->fill($request->all());
        $missing->status = 'desaparecido';
        $missing->photo = $fileName;

        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_nameR;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->policy = $request->policy === "true" ? 1 : 0;

        $user->save();
        $user->missings()->save($missing);

        return Flash::success('El registro se creó correctamente!');
    }
}