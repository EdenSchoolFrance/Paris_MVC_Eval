<?php
/**
 * Class Posts
 * Gère les articles du blog.
 */
class Posts extends Controller {
    /**
     * @var mixed
     */
    private $postModel;

    /**
     * Posts constructor
     * Charge le model des articles
     */
    public function __construct() {
        $this->postModel = $this->loadModel('Post');
    }

    /**
     * Récupère tous les articles et les retourne à la vue.
     */
    public function index() {
        $posts = $this->postModel->findAllPosts();

        $data = [
            'posts' => $posts
        ];

        $this->render('posts/index', $data);
    }

    public function create()
    {
        if (!isLoggedIn()) {
            header("Location: " . URL_ROOT . '/posts');
        }

        $data = [
            'title' => '',
            'slug' => '',
            'image' => '',
            'body' => '',
            'published' => 0,
            'titleError' => '',
            'slugError' => '',
            'imageError' => '',
            'bodyError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'slug' => trim($_POST['slug']),
                'image' => $_POST['image'],
                'body' => trim($_POST['body']),
                'published' => 0,
                'titleError' => '',
                'slugError' => '',
                'imageError' => '',
                'bodyError' => '',
            ];

            if (empty($data['title'])) {
                $data['titleError'] = "le titre de  l'article est requis";
            }

            if (empty($data['slug'])) {
                $data['slugError'] = "le titre de  l'article est requis";
            }

            if (empty($data['image'])) {
                $data['imageError'] = "le titre de  l'article est requis";
            }

            if (empty($data['body'])) {
                $data['bodyError'] = "le titre de  l'article est requis";
            }

            if (empty($data['titleError']) && empty($data['slugError']) && empty($data['imageError']) && empty($data['bodyError'])) {
                if ($this->postModel->addPost($data)) {
                    header("Location: " . URL_ROOT . '/posts');
                } else {
                    die("Quelque chose c'est mal passé ! Réessayer");
                }
            } else {
                $this->render('posts/create', $data);
            }
        }
        $this->render('posts/create', $data);
    }

    public function update($id) {
        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URL_ROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URL_ROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'slug' => '',
            'image' => '',
            'body' => '',
            'titleError' => '',
            'slugError' => '',
            'imageError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'post_id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'slug' => trim($_POST['slug']),
                'image' => trim($_POST['image']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'slugError' => '',
                'imageError' => '',
                'bodyError' => ''
            ];

            if(empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }
            if(empty($data['slug'])) {
                $data['slugError'] = 'The slug of a post cannot be empty';
            }
            if(empty($data['image'])) {
                $data['imageError'] = 'The title of a post cannot be empty';
            }
            if(empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }

            if($data['title'] == $this->postModel->findPostById($id)->title) {
                $data['titleError'] == 'At least change the title!';
            }
            if($data['slug'] == $this->postModel->findPostById($id)->slug) {
                $data['slugError'] == 'At least change the title!';
            }
            if($data['image'] == $this->postModel->findPostById($id)->image) {
                $data['imageError'] == 'At least change the title!';
            }
            if($data['body'] == $this->postModel->findPostById($id)->body) {
                $data['bodyError'] == 'At least change the body!';
            }

            if (empty($data['titleError']) && empty($data['slugError']) && empty($data['imageError']) && empty($data['bodyError'])) {
                if ($this->postModel->updatePost($data)) {
                    header("Location: " . URL_ROOT . "/posts");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->render('posts/update', $data);
            }
        }

        $this->render('posts/update', $data);
    }

    public function delete($id) {
        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()) {
            header("Location: " . URL_ROOT . "/posts");
        } elseif($post->user_id != $_SESSION['user_id']){
            header("Location: " . URL_ROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->postModel->deletePost($id)) {
                header("Location: " . URL_ROOT . "/posts");
            } else {
                die('Something went wrong!');
            }
        }
    }
}
