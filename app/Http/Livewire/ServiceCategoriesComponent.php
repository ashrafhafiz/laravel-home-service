<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $data['serviceCategories'] = ServiceCategory::all();
        return view('livewire.service-categories-component', $data)
            ->layout('layouts.base');
    }
}
