<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render(
            'homepage.html.twig'
        );
    }

     /**
     * @Route("/portfolio", name="createSerie")
     */
    public function getSerie(Request $request){

        $title = $request->get('title');
        $description = $request->get('description');
        $category = $request->get('category');

        if ($title){
            if (!file_exists('series.json')){
                $series = [];
            } else {
                $seriesJson = file_get_contents('series.json');
                $series = json_decode($seriesJson);
            }

            $series[] = [
                'title' => $title,
                'description' => $description,
                'category' => $category
            ];

            file_put_contents('series.json', json_encode($series));
        }

        return $this->render("createSerie.html.twig",
            [
                'title' => $title,
                'description'=>$description,
                'category'=>$category
            ]);
    }

     /**
     * @Route("/contact", name="contactPage")
     */
    public function getContactForm(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        if ($name){
            if (!file_exists('contacts.json')){
                $contacts = [];
            } else {
                $contactsJson = file_get_contents('contacts.json');
                $contacts = json_decode($contactsJson);
            }

            $contacts[] = [
                'name' => $name,
                'email' => $email,
                'message' => $message
            ];

            file_put_contents('contacts.json', json_encode($contacts));
        }

        return $this->render('contact.html.twig',
            [
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);
    }


//    /**
//     * @Route("/contact", name="contact_page")
//     */
//    public function contactpage()
//    {
//        return $this->render('contact.html.twig');
//    }

}