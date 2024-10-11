<?php 
namespace App\View\Composers;

use App\Repositories\AdminRepository;
use Illuminate\View\View;

class AdminComposer
{
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
    public function compose(View $view)
    {
        $elemsCount = $this->adminRepository->getCount();
        $postData=[
            [
              'name'=>'Всего постов',
              'count'=>$elemsCount['postpublished'] + $elemsCount['postnotPublished'] 
            ],
            [
              'name'=>'Опубликовано',
              'count'=>$elemsCount['postpublished']
            ],
            [
              'name'=>'Неопубликовано',
              'count'=>$elemsCount['postnotPublished']
            ]
            ];
        $tagData=[
            [
              'name'=>'Всего Тэгов',
              'count'=>$elemsCount['tags']  
            ]
            ];
        $categoryData=[
              [
                'name'=>'Всего Категорий',
                'count'=>$elemsCount['categories']  
              ]
              ];
        $data = [
                'categoryData'=> $categoryData , 
                'tagData'=> $tagData ,
                'postData'=> $postData
              ];

        $view->with('elemsCount',$data);
    }
    
}