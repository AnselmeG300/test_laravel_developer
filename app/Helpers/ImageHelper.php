<?php

namespace App\Helpers;


class ImageHelper 
{
    public static function createImage () {
        return '<div class="form-group">
                    <div class="file-upload col-12 text-right">
                        <div class="file-upload-content" style="display:none;">
                            <div class="image-title-wrap ">
                                <button class="file-upload-btn btn btn-primary btn-sm " title="modifier la photo" type="button" onclick="$(\'.file-upload-input\').trigger( \'click\' )">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </button>
                                <button type="button" onclick="removeUpload()" title="supprimer la photo" class="btn btn-danger btn-sm">
                                    <i class="material-icons">close</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </div>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type=\'file\' id="id_file-upload-input" value="IMAGE AU FORMAT PNG/JPG/GIF" onchange="readURL(this);" accept="image/*" name="currentFile" required/>
                            <div class="drag-text">
                            </div>
                        </div>
                        <div class="file-upload-content " style="display:none;">
                            <img class="file-upload-image img img-responsive" style="height: 250px; width: 400px; border-radius: 10%;" name="currentImage"  src="#" alt="your image" />
                        </div>
                    </div>
                </div>';    
    }

    public static function editImage () {
       return '<button class="file-upload-btn btn btn-primary btn-sm add" type="button" style="display:none;" onclick="$(\'.file-upload-input\').trigger( \'click\' )">IMAGE AU FORMAT PNG/JPG/GIF</button>          
            <div class="file-upload-content">
                <div class="image-title-wrap ">
                    <button class="file-upload-btn btn btn-primary btn-sm " title="modifier la photo" type="button" onclick="$(\'.file-upload-input\').trigger( \'click\' )">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                    </button>
                    <button type="button" onclick="removeUpload()" title="supprimer la photo" class="btn btn-danger btn-sm">
                        <i class="material-icons">close</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </div>';     
    }
}