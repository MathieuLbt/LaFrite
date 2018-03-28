<?php

namespace App\Controller;


use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    /**
     * @Route("/", name="blog")
     */
    public function index()
    {
        return new Response('
            <html>
                <body>
                    <h1 style="text-align:center; margin-top:150px; font-family: sans-serif;">Welcome to your new controller!</h1>
    
    </body>
        </html>');
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();




        return $this->render('blog.html.twig', [
            'posts' => $posts,
        ]);
    }
    /**
     * @Route("/blog/post/new", name="new_blog_post")
     */
    public function newPost(Request $request)

    {
        $posts = new Post();

        $form = $this->createForm(PostType::class, $posts);


        return $this->render('news_blog_post.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     */


}