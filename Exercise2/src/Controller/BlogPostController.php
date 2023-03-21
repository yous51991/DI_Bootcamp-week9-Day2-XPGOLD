<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Form\BlogPostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    #[Route('/blog/post', name: 'app_blog_post')]
    public function index(): Response
    {

        $post = new BlogPost();
        $postType = $this->createForm(BlogPostType::class, $post);

        return $this->render('blog_post/blog_post.html.twig', [
            'form' => $postType,
        ]);
    }
}
