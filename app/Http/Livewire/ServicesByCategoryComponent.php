<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServicesByCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $serviceCategory = ServiceCategory::getBySlug($this->category_slug);
        return view('livewire.services-by-category-component', ['serviceCategory' => $serviceCategory])
            ->layout('layouts.base');
    }
}
