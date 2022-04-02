<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $data['serviceCategories'] = ServiceCategory::paginate(5);
        return view('livewire.admin.admin-service-category-component', $data)
            ->layout('layouts.base');
    }
}
