<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\SectionValue;
use App\Models\seoTable;

class DashboardController extends Controller
{
    private $mSectionValue;
    private $mseoTable;

    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue    = new SectionValue();
        $this->mseoTable = new seoTable();
    }


    /**
     * | Get and render Dasboard details 
     * | Get the details from the db and render the dashboard 
        | Serial No : 01
        | Working
        | 6 section`
     */
    public function index()
    {
        $pageName = "landingPage";                                              // Static put in config
        $newArray = array();

        $metaData = $this->mseoTable->getSeoByPage("homePage")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/hero", [
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
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
        $metaData = $this->mseoTable->getSeoByPage("aboutUs")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/about-us", [
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
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
        $metaData = $this->mseoTable->getSeoByPage("destination")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-destination", [
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
    }

    /**
     * | Get the destials for the little inpiration page 
        | Serial No : 04
        | Under Con
     */
    public function littileInspiration()
    {
        $mFile = new File();
        $pageName = "littileInspiration";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("experiences")->first();
        $fileDataPhoto = $mFile::where('file_type', "photo")->get();
        $fileDataVideo = $mFile::where('file_type', "video")->get();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/littile-inspiration", [
            "pageData" => $newArray,
            "tourData" => $fileDataPhoto,
            "videoData1" => $fileDataVideo->first()->file_path ?? "",
            'meta' =>$metaData
        ]);
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
        $metaData = $this->mseoTable->getSeoByPage("services")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/our-service",[
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
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
        $metaData = $this->mseoTable->getSeoByPage("travel")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/responsible-travel",[
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
    }

    /**
     * | Get the blog page details and view it 
        | Serial No : 07
        | Under Con
        | Not used
     */
    public function blogs()
    {
        $pageName = "blogs";                                              // Static put in config
        $newArray = array();
        $metaData = $this->mseoTable->getSeoByPage("homePage")->first();
        $pageData = $this->mSectionValue->getDataForPage($pageName)->get();
        foreach ($pageData as $pageDatas) {
            $newKey = "section" . $pageDatas->page_section . $pageDatas->section_type;
            $newArray[$newKey] = $pageDatas->value;
        }
        return view("pages/blogs", [
            "pageData" => $newArray,
            "meta" => $metaData
        ]);
    }


    public function privacyPolicy()
    {
        return view("pages/privacy-policy");
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


    public function thankYou()
    {
        return view("pages/thank-you");
    }
}
