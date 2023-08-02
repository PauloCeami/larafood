<?php

namespace App\Observers;

use \App\Models\Planos;
use Illuminate\Support\Str;

class PlanosObserver {

    /**
     *  ******* Events no Eloquent  https://laravel.com/docs/8.x/eloquent#events
     * 
     * Os modelos Eloquent despacham vários eventos, permitindo que você 
     * se conecte aos seguintes momentos no ciclo de vida de um
     * modelo: retrieved, creating, created, updating, updated, saving, saved, deleting,
     * deleted, restoring, restorede replicating.

      O retrieved evento será despachado quando um modelo existente for
     * recuperado do banco de dados. Quando um novo modelo é salvo pela 
     * primeira vez, os eventos creatinge created serão despachados.
     * Os eventos updating/ updated serão despachados quando um modelo
     * existente for modificado e o save método for chamado. Os eventos saving/ 
     * saved serão despachados quando um modelo for criado ou atualizado - 
     * mesmo que os atributos do modelo não tenham sido alterados. Os nomes de
     * eventos que terminam com -ing são despachados antes que qualquer alteração 
     * no modelo seja mantida, enquanto os eventos que terminam com -ed são despachados 
     * após a persistência das alterações no modelo.
     * 
     * Handle the Planos "creating" event.
     * Call antes de criar um plano
     *
     * @param  \App\Models\Models\Planos  $planos
     * @return void
     */
    public function creating(Planos $planos) {
        $planos->plan_url = Str::kebab($planos->plan_nome);
    }

    /**
     * Handle the Planos "updating" event.
     *
     * @param  \App\Models\Models\Planos  $planos
     * @return void
     */
    public function updating(Planos $planos) {
        $planos->plan_url = Str::kebab($planos->plan_nome);
    }

    /**
     * Handle the Planos "deleted" event.
     *
     * @param  \App\Models\Models\Planos  $planos
     * @return void
     */
    public function deleted(Planos $planos) {
        //
    }

    /**
     * Handle the Planos "restored" event.
     *
     * @param  \App\Models\Models\Planos  $planos
     * @return void
     */
    public function restored(Planos $planos) {
        //
    }

    /**
     * Handle the Planos "force deleted" event.
     *
     * @param  \App\Models\Models\Planos  $planos
     * @return void
     */
    public function forceDeleted(Planos $planos) {
        //
    }
}
