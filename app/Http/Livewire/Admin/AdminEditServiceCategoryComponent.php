<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $categoryId;
    public $name;
    public $slug;
    public $image;
    public $newImage;

    public function mount()
    {
        $serviceCategory = ServiceCategory::find($this->categoryId);
        $this->categoryId = $serviceCategory->id;
        $this->name = $serviceCategory->name;
        $this->slug = $serviceCategory->slug;
        $this->image = $serviceCategory->image;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newImage) {
            $this->validateOnly($fields, [
                'newImage' => 'required|mimes:png,jpg,jpeg'
            ]);
        }
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newImage) {
            $this->validate([
                'newImage' => 'required|mimes:png,jpg,jpeg'
            ]);
        }

        $serviceCategory = ServiceCategory::find($this->categoryId);
        $serviceCategory->name = $this->name;
        $serviceCategory->slug = $this->slug;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('categories', $imageName);
            $serviceCategory->image = $imageName;
        }
        $serviceCategory->save();

        session()->flash('message', 'Category has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')
            ->layout('layouts.base');
    }
}
