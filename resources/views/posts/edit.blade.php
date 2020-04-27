@extends('layouts.app')

@section('page-title')
Edit Post 

@endsection


@section('main-content')


<div class="col-sm-8">
    <section class="panel panel-default">
      
        <div class="panel-body">
            <form class="bs-example form-horizontal" action="{{action('PostManagement@update',$edit->id)}}" method="POST">
            @csrf
                <input type="hidden" name="_method" value="PUT" /> 
            
            <div class="form-group">
                    <label class="col-lg-4 control-label">Post Title</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control"name="post_title" value="{{$edit->post_title}}" >
                    </div>
            </div>
            <div class="form-group">
                    <label class="col-lg-4 control-label">Post Category</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="post_cat" value="{{$edit->post_cat}}" >
                    </div>
            </div>
           


            <label class="col-sm-2 control-label">Post Content</label>
    <div class="col-sm-10">
        <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
            <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a data-edit="fontName Serif" style="font-family:'Serif'">Serif</a></li>
                    <li><a data-edit="fontName Sans" style="font-family:'Sans'">Sans</a></li>
                    <li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li>
                    <li><a data-edit="fontName Arial Black" style="font-family:'Arial Black'">Arial Black</a></li>
                    <li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li>
                    <li><a data-edit="fontName Courier New" style="font-family:'Courier New'">Courier New</a></li>
                    <li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li>
                    <li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li>
                    <li><a data-edit="fontName Impact" style="font-family:'Impact'">Impact</a></li>
                    <li><a data-edit="fontName Lucida Grande" style="font-family:'Lucida Grande'">Lucida Grande</a></li>
                    <li><a data-edit="fontName Lucida Sans" style="font-family:'Lucida Sans'">Lucida Sans</a></li>
                    <li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li>
                    <li><a data-edit="fontName Times" style="font-family:'Times'">Times</a></li>
                    <li><a data-edit="fontName Times New Roman" style="font-family:'Times New Roman'">Times New Roman</a></li>
                    <li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li>
                </ul>
            </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                    <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                    <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                </ul>
            </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a> <a class="btn btn-default btn-sm" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> <a class="btn btn-default btn-sm" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class="fa fa-strikethrough"></i></a> <a class="btn btn-default btn-sm" data-edit="underline" title="" data-original-title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class="fa fa-list-ul"></i></a> <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class="fa fa-list-ol"></i></a> <a class="btn btn-default btn-sm" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a> <a class="btn btn-default btn-sm" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class="fa fa-indent"></i></a> </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm btn-info" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> <a class="btn btn-default btn-sm" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> <a class="btn btn-default btn-sm" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a> </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu">
                    <div class="input-group m-l-xs m-r-xs">
                        <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-sm" type="button">Add</button>
                        </div>
                    </div>
                </div> <a class="btn btn-default btn-sm" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class="fa fa-cut"></i></a> </div>
            <div class="btn-group hide"> <a class="btn btn-default btn-sm" title="" id="pictureBtn" data-original-title="Insert picture (or just drag &amp; drop)"><i class="fa fa-picture-o"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" style="opacity: 0; position: absolute; top: 0px; left: 0px; width: 0px; height: 0px;"> </div>
            <div class="btn-group"> <a class="btn btn-default btn-sm" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a> <a class="btn btn-default btn-sm" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> </div>
        </div>
        <textarea name="post_content" value="{{$edit->post_content}}" id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px" contenteditable="true">  </textarea>
    </div>
</div>
           
               
                <div class="form-group">
                    <div class="col-lg-offset-6 col-lg-6">
                        <button type="submit" class="btn btn-sm btn-default"><center>Update</center></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>


@endsection