<?php



namespace app\controllers;
use app\models\Post;


class PostController extends NewController {
    public function actionIndex() {
       // $hello = 'Привет, мир!';
        //$posts = Post::find()->orderBy('id ASC')->all();
        $query = Post::find()->select('id, title, published_at')->orderBy('published_at DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
      //  $this->debug($posts);
     // debug($posts);
            return $this->render('index', compact('posts', 'pages'));

    }
    public function actionView() {
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post)) throw new \yii\web\HttpException(404, 'Такой страницы нет...');
        return $this->render('view', compact('post'));
        echo '123';
       
      
        
    }
     
        
    
     public function actionTest() {
      
            return $this->render('test');
    }
}
 echo $id; 