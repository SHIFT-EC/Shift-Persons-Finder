<?php

namespace Spf\Shift\Repositories;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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

        $fileName = $this->setNamePhoto($request->photo);

        $missing->fill($request->all());
        $missing->status = 'desaparecido';
        $missing->photo  = $fileName;

        $findUser = User::where('email', '=', $request->email)->first();

        if($findUser) {
            $user = $findUser;
        } else {
            $user            = new User();
            $user->name      = $request->name;
            $user->last_name = $request->last_nameR;
            $user->email     = $request->email;
            $user->phone     = $request->phone;
            $user->policy    = 1;
        }


        $user->save();
        $user->missings()->save($missing);

        return Flash::success('El registro se creó correctamente!');
    }

    /**
     * Get missing person by id
     *
     * @param $id
     * @return mixed
     */
    public function getMissing($id)
    {
        return Missing::with('user')->findOrFail($id);
    }

    /**
     * Update missing person
     *
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updateMissing($request, $id)
    {
        $findUser = User::where('email', '=', $request->email)->first();

        if($findUser) {
            $missing = Missing::findOrFail($id);

            $fileName = $this->setNamePhoto($request->photo);

            $missing->fill($request->all());
            $missing->photo  = $fileName;

            $user = $findUser;

            $user->save();
            $user->missings()->save($missing);

            return Flash::success('El registro se actualizó correctamente!');
        } else {
            return Flash::error('El registro no se puedo actualizar ya que tu no eres el creador del registro');
        }


    }

    /**
     * @param $photoRequest
     * @return string
     */
    public function setNamePhoto($photoRequest) {

        if ($photoRequest) {
            $photo     = $photoRequest;
            $path = public_path() . '/uploads';
            $extension = $photo->getClientOriginalExtension();
            $fileName  = time() . '-' . rand(100, 10000) . '.' . $extension;

            $photo= Image::make($photo->getRealPath())->resize('150','150')->save($path . '/' . $fileName);

            //Storage::disk('local')->put($fileName, File::get($photo));
        } else {
            $fileName = 'avatar.jpg';
        }

        return 'uploads/'. $fileName;
    }
}