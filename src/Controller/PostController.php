<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Services\FileUploader;
use http\Message;
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/post", name="post.")
 */
//đây là cách để tạo thuộc tính post cha. các post bên dưới đều nằm đằng sau post/  vd: post/create.
// check bằng cách php bin/console debug:route

class PostController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    //Khi ta cần gọi 1 thành phần nào đó từ entity thì phải thông qua thằng Repository, rồi lấy all or từng thành phần trong repo
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request, FileUploader $fileUploader){
        $post = new Post();
        //$post->setTitle("This is going to be a title");

        $form = $this->createForm(PostType::class, $post);  //createForm từ src/Form/PostType.php

        $form->handleRequest($request);

        if ($form->isSubmitted()){
            //return a response
            $em = $this->getDoctrine()->getManager();  //manager là nơi quản lý object, biểu thị là khi tạo record mới, ta cần gọi từ trong đó ra, rồi dùng persit để đăng ký vào mangager đó.

            /** @var UploadedFile $file */
            $file = $request->files->get('post')['attachment'];
            if($file){

                $filename = $fileUploader->uploadFile($file);
                $post->setImage($filename);
                //dump($post);
                $em->persist($post);
                $em->flush();  //cmd nay la de reflect created data len database
            }

            return $this->redirect($this->generateUrl('post.index'));
        }
        //return new Response("post was created");
        //return $this->redirect($this->generateUrl("post.index"));
        return $this->render("post/create.html.twig", [
            "form" =>$form->createView()
        ]);
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show(Post $post)    //Post is entity/Post.php (database)
//    public function show($id, PostRepository $postRepository)
    {
//        $post = $postRepository->findPostWithCategory($id);
//        dump($post);



        //crete the show view
        return $this->render("post/show.html.twig", [
            "post" => $post
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    //luồng : từ html.twig, bấm vào button delete thì sẽ call đến post.delete ( function này)
    //khi hàm này được call thì xóa luôn cái id mà bị click.
    public function remove(Post $post) {
        $em = $this->getDoctrine()->getManager();

        $em->remove($post);
        $em->flush();

        $this->addFlash("success", "Post was removed");
        return $this->redirect($this->generateUrl("post.index"));
    }



}



