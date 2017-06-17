<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Note;

class NoteController extends Controller
{
    /**
     * @Route("/note", name="note")
     */
    public function indexAction(Request $request)
    {
        
    }
    
    /**
     * @Route("/note/vote", name="note_vote")
     */
    public function voteAction(Request $request)
    {
		
	}
}
