<?php
namespace App\View\Composers;

use App\Repositories\FirmRepository;
use Illuminate\View\View;

class FirmComposer
{
    private $firmRepository;

    public function __construct(FirmRepository $firmRepository)
    {
        $this->firmRepository=$firmRepository;
    }

    public function compose(View $view)
    {
        $firms = $this->firmRepository->all();

        $view->with('firms',$firms);

    }
}