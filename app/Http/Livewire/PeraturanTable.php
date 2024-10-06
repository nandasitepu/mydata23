<?php

namespace App\Http\Livewire;

use App\Models\Hukum\Peraturan;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};



use Illuminate\Support\Str;

final class PeraturanTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;


    public array $tentang;

    public array $nomor;

    public array $tahun;

    public bool $showFilters = true;

    public function boot(): void
    {
        config(['livewire-powergrid.filter' => 'outside']);
    }
    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
            ->withoutLoading(),





            Footer::make()
                 ->showPerPage(perPage: 20, perPageValues: [20, 50, 100])
                 ->showRecordCount(mode: 'short'),
                //  ->pagination('components.pagination'),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Hukum\Peraturan>
     */
    public function datasource(): Builder
    {
        return Peraturan::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('jenis')
            ->addColumn('nomor')
            ->addColumn('tentang', fn (Peraturan $model) => ucfirst(strtolower($model->tentang)))
            ->addColumn('tahun_formatted', fn (Peraturan $model) => Carbon::parse($model->tahun)->format('d/m/Y'))
            ->addColumn('status')
            ->addColumn('tanggal_formatted', fn (Peraturan $model) => Carbon::parse($model->tanggal)->format('Y-m-d'))
            ->addColumn('link_bt')
            ->addColumn('link_pjl')
            ->addColumn('created_at_formatted', fn (Peraturan $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
      * PowerGrid Columns.
      *
      * @return array<int, Column>
      */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
            ->bodyAttribute('text-center')
            ->sortable(),


            Column::make('Nomor', 'nomor')
            ->bodyAttribute('whitespace-nowrap')
            ->editOnClick()
                ->sortable()
                ->searchable(),

            Column::make('Tentang', 'tentang')
                ->bodyAttribute()
                ->editOnClick()
                ->sortable()
                ->searchable(),


            Column::make('URL', 'link_bt')
                ->bodyAttribute()
                ->sortable()
                ->searchable(),

            Column::make('Tahun','tahun')
                ->sortable(),




        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            Filter::inputText('nomor', 'nomor')->operators(['contains']),
            Filter::inputText('tentang', 'tentang')->operators(['contains']),
            Filter::inputText('link_bt', 'link_bt')->operators(['contains']),
            Filter::inputText('tahun', 'tahun')->operators(['contains']),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid PeraturanHukum Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-black px-3 py-2.5 m-1 rounded text-sm')
               ->route('peraturan.edit', ['peraturan' => 'id']),
        ];
    }




    protected function rules()
    {
        return [

        ];
    }

    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {


        Peraturan::query()->find($id)->update([
            $field => e($value),
        ]);
    }



}
