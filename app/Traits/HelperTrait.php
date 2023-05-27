<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\This;

trait HelperTrait
{
    protected $image_name;
    protected $image_path;
    protected $image_type;
    protected $personal_name;
    protected $personal_define;
    protected $disk_name;
    protected $path_want_be_delete;
    protected $old_image_path;
    protected $old_image_name;
    protected $image_width;
    protected $image_height;
    protected $old_data_object;
    protected $new_path_want_be_rename;
    protected $check_number;
    protected $check_id;
    protected $SVGImageData;
    protected $file_name;
    protected $file_path;
    protected $file_request;
    protected $file_extension;
    protected $file_full_name;
    /**
     * @param object $_photoName Image Object
     * @return array
     */
    ####### Begin uploadImageProcessing Function #########
//    public function uploadImageProcessing($_photoName = null, $_personalDefine, $_photoType, $_diskName, $_photoWidth, $_photoHeight, $_oldDataObject = null)
//    {
//        $this -> image_type         = $_photoType;
////        $this -> personal_name      = $_personalName;
//        $this -> personal_define    = $_personalDefine;
//        $this -> disk_name          = $_diskName;
//        $this -> image_width        = $_photoWidth;
//        $this -> image_height       = $_photoHeight;
//        $this -> old_data_object    = $_oldDataObject;
//        $this -> old_image_name     = $this -> old_data_object?$this -> old_data_object -> image_name:'default.png';
//        $this -> old_image_path     = $this -> old_data_object?$this -> old_data_object -> image_path:null;
//        $this -> image_name         = 'default.png';
//        $this -> image_path         = $_photoName?$this -> personal_define .DIRECTORY_SEPARATOR. $this -> image_type .DIRECTORY_SEPARATOR:$this -> old_image_path;
//
//        if ($this -> old_data_object){ // This Condition Only Use On Update Case If old_data_object Not Equal Null
//
//            ############################  Check Request Has Image Do It ############################
//            #   1- [ Get Old Image Path From Database ]
//            #   2- [ Convert Path To Array ]
//            #   3- [ Delete Last Part From Path ]
//            #   4- [ Save New Path In Variable ]
//            #   5- [ Get Old Personal Name And Save In Variable ]
//            ############################  Check Request Has Image Do It ############################
//
//            $path_array                         = explode(DIRECTORY_SEPARATOR,  $this -> old_image_path); // array
//            $this -> path_want_be_delete        = $this -> old_image_path?$path_array[0] .DIRECTORY_SEPARATOR.  $path_array[1] .DIRECTORY_SEPARATOR.  $path_array[2]:'';
//            $this -> new_path_want_be_rename    = $this -> old_image_path?$path_array[0] .DIRECTORY_SEPARATOR.  $path_array[1] .DIRECTORY_SEPARATOR:'';
//            $old_personal_name                  = $this -> old_data_object -> name;
//
//            if($_photoName){
//                ############################  Check Request Has Image Do It ############################
//                #   1- [ Check Image Path If Exists Delete The Path ]
//                ############################  Check Request Has Image Do It ############################
//                if (Storage::disk($this -> disk_name)->exists($this -> path_want_be_delete))
//                    Storage::disk($this -> disk_name)->deleteDirectory($this -> path_want_be_delete);
//
//            }
//        }
//
//        if ($_photoName){  // This Condition Use On Create And Update Case
//            ############################  Check Request Has Image Do It ############################
//            #   1- [ Check Image Path If Not Exists Make This is Path ]
//            #   2- [ Make And upload Image In To New Path  ]
//            ############################  Check Request Has Image Do It ############################
//            if (!Storage::disk($this -> disk_name)->exists($this -> image_path))
//            Storage::disk($this -> disk_name)->makeDirectory($this -> image_path);
//
//            if (is_array($_photoName)) {
//                $myArray = [];
//                foreach ($_photoName as $photo)
//                {
//                    $this -> image_name         = $photo?$photo -> hashName():$this -> old_image_name;
//                    $image = Image::make($photo);
//                    $image -> resize($this -> image_width, $this -> image_height);
//                    $image -> save(public_path('storage' .DIRECTORY_SEPARATOR. $this -> image_path.DIRECTORY_SEPARATOR.$this -> image_name));
//                    $m = ['image_path' => $this -> image_path, 'image_name' => $this -> image_name];
//                    array_push($myArray, $m);
//
//                }
//                return $myArray;
//            } else {
//                    $this -> image_name         = $_photoName?$_photoName -> hashName():$this -> old_image_name;
//                    $image = Image::make($_photoName);
//                    $image -> resize($this -> image_width, $this -> image_height);
//                    $image -> save(public_path('storage' .DIRECTORY_SEPARATOR. $this -> image_path.DIRECTORY_SEPARATOR.$this -> image_name));
//
//            }
//
//        }
//        return ['image_path' => $this -> image_path, 'image_name' => $this -> image_name];
//
//    }
    ####### End uploadImageProcessing Function #########



    ####### Begin uploadImageProcessing Function #########
    public function uploadImageProcessing($_photoName = null, $_personalDefine, $_photoType, $_personalName, $_diskName, $_oldDataObject = null)
    {
        $this -> image_type         = $_photoType;
        $this -> personal_name      = $_personalName;
        $this -> personal_define    = $_personalDefine;
        $this -> disk_name          = $_diskName;
////        $this -> image_width        = $_photoWidth;
////        $this -> image_height       = $_photoHeight;
        $this -> old_data_object    = $_oldDataObject;
        $this -> old_image_name     = $this -> old_data_object?$this -> old_data_object -> image_name:'default.png';
        $this -> old_image_path     = $this -> old_data_object?$this -> old_data_object -> image_path:null;
//        $this -> image_name         = 'default.png';
        $this -> image_path         = $_photoName?$this -> personal_define .DIRECTORY_SEPARATOR. $this -> image_type .DIRECTORY_SEPARATOR. $this -> personal_name:$this -> old_image_path;

        if ($this -> old_data_object){ // This Condition Only Use On Update Case If old_data_object Not Equal Null

            ############################  Check Request Has Image Do It ############################
            #   1- [ Get Old Image Path From Database ]
            #   2- [ Convert Path To Array ]
            #   3- [ Delete Last Part From Path ]
            #   4- [ Save New Path In Variable ]
            #   5- [ Get Old Personal Name And Save In Variable ]
            ############################  Check Request Has Image Do It ############################

            $path_array                         = explode(DIRECTORY_SEPARATOR,  $this -> old_image_path); // array
            $this -> path_want_be_delete        = $this -> old_image_path?$path_array[0] .DIRECTORY_SEPARATOR.  $path_array[1] .DIRECTORY_SEPARATOR.  $path_array[2]:'';
            $this -> new_path_want_be_rename    = $this -> old_image_path?$path_array[0] .DIRECTORY_SEPARATOR.  $path_array[1] .DIRECTORY_SEPARATOR. $this -> personal_name:'';
            $old_personal_name                  = $this -> old_data_object -> name;

            if($_photoName){
                ############################  Check Request Has Image Do It ############################
                #   1- [ Check Image Path If Exists Delete The Path ]
                ############################  Check Request Has Image Do It ############################
                if (Storage::disk($this -> disk_name)->exists($this -> path_want_be_delete))
                    Storage::disk($this -> disk_name)->deleteDirectory($this -> path_want_be_delete);

            }else{

                ############################  Check Request Dos Not Have Image Do It ############################
                #   1- [ Check Old Personal Name Not Equal New Personal Name ]
                #   2- [ Check Image Path If Exists Rename The Personal name Directory To New Personal Name ]
                #   3- [ Update Value Image Path Variable To New Path  ]
                ############################  Check Request Dos Not Have Image Do It ############################

                if ($old_personal_name !== $this -> personal_name){
                    if (Storage::disk($this -> disk_name)->exists($this -> path_want_be_delete))
                        Storage::disk($this -> disk_name)->move($this -> path_want_be_delete, $this -> new_path_want_be_rename);
                    $this -> image_path = $this -> new_path_want_be_rename;
                }
            }
        }

        if ($_photoName){  // This Condition Use On Create And Update Case
            ############################  Check Request Has Image Do It ############################
            #   1- [ Check Image Path If Not Exists Make This is Path ]
            #   2- [ Make And upload Image In To New Path  ]
            ############################  Check Request Has Image Do It ############################
            if (!Storage::disk($this -> disk_name)->exists($this -> image_path))
                Storage::disk($this -> disk_name)->makeDirectory($this -> image_path);

            if (is_array($_photoName)) {
                $myArray = [];
                foreach ($_photoName as $photo)
                {
                    $this -> image_name         = $photo?str_replace(' ', '_', $photo -> getClientOriginalName()):$this -> old_image_name;
                    $image = Image::make($photo);
//                    $image -> resize($this -> image_width, $this -> image_height);
                    $image -> save(public_path('storage' .DIRECTORY_SEPARATOR. $this -> image_path.DIRECTORY_SEPARATOR.$this -> image_name));
                    $m = ['image_path' => $this -> image_path, 'image_name' => $this -> image_name];
                    array_push($myArray, $m);

                }
                return $myArray;
            } else {
                $this -> image_name         = $_photoName?str_replace(' ', '_', $_photoName -> getClientOriginalName()):$this -> old_image_name;
                $image = Image::make($_photoName);
//                $image -> resize($this -> image_width, $this -> image_height);
                $image -> save(public_path('storage' .DIRECTORY_SEPARATOR. $this -> image_path.DIRECTORY_SEPARATOR.$this -> image_name));

            }

        }
        return ['image_path' => $this -> image_path, 'image_name' => $this -> image_name];

    }
    ####### End uploadImageProcessing Function #########




    ####### Begin uploadFileProcessing Function #########

    public function uploadFileProcessing($_fileRequest, $_diskName, $_checkNumber, $_fileName , $_filePath, $_fileExtension)
    {
        $this->file_request = $_fileRequest;
        $this->disk_name = $_diskName;
        $this->check_number = $_checkNumber;
        $this->file_name = $_fileName;
        $this->file_path = $_filePath;
        $this->file_extension = $_fileExtension;
        $this->file_full_name = $this->file_name .'.'. $this->file_extension;

        /* upload file */
        $this->file_request -> storeAs('public/'.$this->file_path,$this->check_number.DIRECTORY_SEPARATOR.$this->file_full_name);

        return ['path' => $this -> file_path.DIRECTORY_SEPARATOR.$this->check_number, 'name' => $this -> file_full_name, 'extension' => $this -> file_extension];
    }

    ####### End uploadFileProcessing Function #########

    ####### Begin deleteImageHandel Function #########
    /**
     * @param string $storageDiskName                       Example public Or S3
     * @param object $image_request                         Example Image Object
     * @return \Response json
     */

    public function deleteImageHandel($storageDiskName, $image_request)
    {
        $this -> disk_name              = $storageDiskName;
        $image_full_path = $image_request['image_path'].DIRECTORY_SEPARATOR.$image_request['image_name'];

        // Check image is exist
        if (Storage::disk($this -> disk_name) ->exists($image_full_path)){
            // Remove image
            Storage::disk($this -> disk_name) ->delete($image_full_path);
            return true;
        }

        return false;
    }
    ####### End deleteImageHandel Function #########

    ####### Begin uploadSVGImage Function #########

    public function uploadSVGImage($check_id, $SVGImageData, $_personalDefine, $_photoType, $_personalName, $_diskName)
    {

        $this -> personal_define    = $_personalDefine;
        $this -> image_type         = $_photoType;
        $this -> personal_name      = $_personalName;
        $this -> disk_name          = $_diskName;
        $this -> check_id           = $check_id;
        $this -> SVGImageData       = base64_decode($SVGImageData);
        $this -> image_name         = md5(date("dmYhisA"));
        $this -> image_path         = $this -> personal_define.DIRECTORY_SEPARATOR.$this -> image_type.DIRECTORY_SEPARATOR.$this -> personal_name;

        //Location to where you want to created sign image
        $full_path = public_path('storage'.DIRECTORY_SEPARATOR.$this -> personal_define.DIRECTORY_SEPARATOR.$this -> image_type.DIRECTORY_SEPARATOR.$this -> personal_name.DIRECTORY_SEPARATOR.$this -> image_name.'.png');
        if (!Storage::disk($this -> disk_name)->exists($this -> image_path)){
            Storage::disk($this -> disk_name)->makeDirectory($this -> image_path);
        }
        $image = Image::make($SVGImageData);
        $image -> save($full_path);

        return ['image_path' => $this -> image_path, 'image_name' => $this -> image_name.'.png'];
    }
    ####### End uploadSVGImage Function #########
}
