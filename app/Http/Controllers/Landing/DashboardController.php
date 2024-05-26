<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use App\Models\SectionType;
use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $mSectionValue;

    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
    }


    /**
     * | Get and render Dasboard details 
     * | Get the details from the db and render the dashboard 
        | Serial No : 01
        | Under Con 
        | 6 section`
     */
    public function index()
    {
        $pageName = "landingPage";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/hero", $newArray);
    }


    /**
     * | Get Destination details and render it 
     * | Destination detials only
        | Serial No : 02
        | Under con
     */
    public function aboutUs()
    {
        $pageName = "aboutUs";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/about-us", $newArray);
    }

    /**
     * | Get detials and view Our services 
     * | Services details only 
        | Serial No : 03
        | Under Con 
     */
    public function ourDestination()
    {
        $pageName = "ourDestination";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-destination", $newArray);
    }

    /**
     * | Get the destials for the little inpiration page 
        | Serial No : 04
        | Under Con
     */
    public function littileInspiration()
    {
        $pageName = "littileInspiration";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/littile-inspiration", $newArray);
    }


    /**
     * | Get the details for the our services page 
        | Serial No : 05
        | Under Con 
     */
    public function ourServic()
    {
        $pageName = "ourServic";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-service", $newArray);
    }

    /**
     * | Get the details for the responsible travel page 
        | Serial No : 06
        | Under Con 
     */
    public function responsibleTravel()
    {
        $pageName = "responsibleTravel";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/responsible-travel", $newArray);
    }

    /**
     * | Get the blog page details and view it 
        | Serial No : 07
        | Under Con
     */
    public function blogs()
    {
        $pageName = "blogs";                                              // Static put in config
        $newArray = array();
        # Get the landing page Dats
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/blogs", $newArray);
    }


    /**
     * | Get the details and view the contact us page 
        | Serial no :
        | Under Con 
     */
    public function contactUs()
    {
        return view("pages/contact-us");
    }
}
