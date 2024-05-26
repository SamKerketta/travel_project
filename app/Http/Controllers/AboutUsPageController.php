<?php

namespace App\Http\Controllers;

use App\Models\SectionValue;
use Exception;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    /**
     * | About Us Page
     */
    public function aboutusPage()
    {
        return view('admin.pages.aboutus');
    }   

    private $mPageSection;
    private $mSectionType;
    private $mSectionValue;

    // Initializing Construct Function 
    public function __construct()
    {
        $this->mSectionValue = new SectionValue();
    }


    /**
     * | For the first section 
     * | Completed
        | Serial no : 01
     */
    public function sectionUpdate1(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section1'  => 'required',
            'image'    => 'nullable|mimes:jpg,png,jpeg',
            'title'    => 'nullable',
            'content'    => 'nullable',
        ]);

        try {
            # Update the page contents 
            $section = array();

            if ($req->hasFile('image') && $req->image) {
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section1,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            if (isset($req->title)) {
                $second = [
                    "sectionName" => $req->section1,
                    "value" => "$req->title",
                    "type" => "title"
                ];
                array_push($section, $second);
            }

            if (isset($req->content)) {
                $second = [
                    "sectionName" => $req->section1,
                    "value" => "$req->content",
                    "type" => "content"
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }

            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * | Section 2
     */
    public function sectionUpdate2(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section2'  => 'required',
            'image'    => 'nullable',
            'heading1'    => 'nullable',
            'heading2'    => 'nullable',
            'content1'    => 'nullable',
            'content2'    => 'nullable',
            'content3'    => 'nullable',
            'content4'    => 'nullable'
        ]);

        try {
            $section = array();

            #image
            if ($req->hasFile('image') && $req->image) {
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section2,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #heading1
            if (isset($req->heading1)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->heading1",
                    "type" => "heading1"                                     // Static
                ];
                array_push($section, $second);
            }

            #heading2
            if (isset($req->heading2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->heading2",
                    "type" => "heading2"                                     // Static
                ];
                array_push($section, $second);
            }

            #content1
            if (isset($req->content1)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->content1",
                    "type" => "content1"                                  // Static
                ];
                array_push($section, $second);
            }

            #content2
            if (isset($req->content2)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->content2",
                    "type" => "content2"                                  // Static
                ];
                array_push($section, $second);
            }

            #content3   
            if (isset($req->content3)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->content3",
                    "type" => "content3"                                  // Static
                ];
                array_push($section, $second);
            }

            #content4   
            if (isset($req->content4)) {
                $second = [
                    "sectionName" => $req->section2,
                    "value" => "$req->content4",
                    "type" => "content4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    /**
     * | Section 3
     */
    public function sectionUpdate3(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section3'  => 'required',
            'image'     => 'nullable',
            'heading'   => 'nullable',
            'content1'   => 'nullable',
            'content2'   => 'nullable',
            'content3'   => 'nullable',
        ]);

        try {
            $section = array();

            #image
            if ($req->hasFile('image') && $req->image) {
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section3,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #2
            if (isset($req->heading)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->heading",
                    "type" => "heading"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content1)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->content1",
                    "type" => "content1"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content2)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->content2",
                    "type" => "content2"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content3)) {
                $second = [
                    "sectionName" => $req->section3,
                    "value" => "$req->content3",
                    "type" => "content3"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * | Section 4
     */
    public function sectionUpdate4(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section4'  => 'required',
            'image1'     => 'nullable',
            'image2'     => 'nullable',
            'heading'   => 'nullable',
            'content1'   => 'nullable',
            'content2'   => 'nullable',
            'content3'   => 'nullable',
            'content4'   => 'nullable',
        ]);

        try {
            $section = array();

            #image
            if ($req->hasFile('image1') && $req->image1) {
                $file = $req->file('image1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #image
            if ($req->hasFile('image2') && $req->image2) {
                $file = $req->file('image2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #2
            if (isset($req->heading)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->heading",
                    "type" => "heading"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content1)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content1",
                    "type" => "content1"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content2",
                    "type" => "content2"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content3",
                    "type" => "content3"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content4)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content4",
                    "type" => "content4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * | Section 5
     */
    public function sectionUpdate5(Request $req)
    {
        $req->validate([
            'pageName'  => 'required',
            'section5'  => 'required',
            'image1'     => 'nullable',
            'image2'     => 'nullable',
            'heading1'   => 'nullable',
            'heading2'   => 'nullable',
            'subheading1'   => 'nullable',
            'subheading2'   => 'nullable',
            'content1'   => 'nullable',
            'content2'   => 'nullable',
            'content3'   => 'nullable',
            'content4'   => 'nullable',
        ]);

        try {
            $section = array();

            #image
            if ($req->hasFile('image1') && $req->image1) {
                $file = $req->file('image1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #image
            if ($req->hasFile('image2') && $req->image2) {
                $file = $req->file('image2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . rand(10, 100) . "." . $extension;
                $viewPath = "uploads/aboutus   ";
                $path = public_path() . '/' . $viewPath;
                $file->move($path, $filename);
                $actualFileName = $viewPath . "/" . $filename;

                $first = [
                    "sectionName" => $req->section4,
                    "value" => $actualFileName,
                    "type" => "image"
                ];
                array_push($section, $first);
            }

            #2
            if (isset($req->heading)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->heading",
                    "type" => "heading"                                     // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content1)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content1",
                    "type" => "content1"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content2)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content2",
                    "type" => "content2"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content3)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content3",
                    "type" => "content3"                                  // Static
                ];
                array_push($section, $second);
            }

            #3
            if (isset($req->content4)) {
                $second = [
                    "sectionName" => $req->section4,
                    "value" => "$req->content4",
                    "type" => "content4"                                  // Static
                ];
                array_push($section, $second);
            }

            if (!empty($section)) {
                foreach ($section as $sections) {
                    $this->mSectionValue->updateValues($sections, $req->pageName);
                }
            }
            $responseMsg = $req->pageName . " Content Updated";
            return back()->with('success', $responseMsg);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
