<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataDevice;

class Notification_API extends Controller {
    // Get Restponse
    public function insertNotification(Request $req, DataDevice $data) {
        $temp = $req->all();
        $temp = $temp["m2m:sgn"]["m2m:nev"]["m2m:rep"]["m2m:cin"]["con"];
        $temp = json_decode($temp);

        // Insert To DataDevice

        $data->insert([
            "id_device"     => $temp->id_device,
            "Va"            => $temp->Va,
            "Vb"            => $temp->Vb,
            "Vc"            => $temp->Vc,
            "Vab"           => $temp->Vab,
            "Vbc"           => $temp->Vbc,
            "Vca"           => $temp->Vca,
            "Ia"            => $temp->Ia,
            "Ib"            => $temp->Ib,
            "Ic"            => $temp->Ic,
            "Pa"            => $temp->Pa,
            "Pb"            => $temp->Pb,
            "Pc"            => $temp->Pc,
            "Qa"            => $temp->Qa,
            "Qb"            => $temp->Qb,
            "Qc"            => $temp->Qc,
            "Sa"            => $temp->Sa,
            "Sb"            => $temp->Sb,
            "Sc"            => $temp->Sc,
            "PFa"           => $temp->PFa,
            "PFb"           => $temp->PFb,
            "PFc"           => $temp->PFc,
            "Freq"          => $temp->Freq,
            "TAE"           => $temp->TAE
        ]);
    }
}
