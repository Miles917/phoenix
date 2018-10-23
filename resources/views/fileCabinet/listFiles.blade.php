@extends('layouts.simple')

@section('content')
    <div id="content" class="content">
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="jumbotron">
                            <h1><i class="fa fa-mail-reply"></i> Company Files </h1>
                            <p>
                                This section is designed to list the files in the archive
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- style="background-color: #eee;" -->
                        <div class="alert alert-info" role="alert">
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#checklist-pill" data-toggle="tab">Checklists</a></li>
                                <li><a href="#employee-pill" data-toggle="tab">Employee Files</a></li>
                                <li><a href="#policy-pill" data-toggle="tab">Policies</a></li>
                                <li><a href="#processes-pill" data-toggle="tab">Processes</a></li>
                                <li><a href="#storeFiles-pill" data-toggle="tab">Store Files</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content" style="background-color: transparent;">
                    <div class="tab-pane fade in active" id="checklist-pill">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">Checklists</h4>
                                    </div>
                                    <div class="panel-body">
                                        <form id="fileupload" action="{{ URL::route('postNewFile') }}" method="POST"
                                              enctype="multipart/form-data">
                                                <div class="row fileupload-buttonbar">
                                                    <div class="col-md-12">
                                                    <span class="btn btn-success fileinput-button">
                                                        <i class="fa fa-plus"></i>
                                                        <span>Add files...</span>
                                                        <input type="file" name="files[]" multiple>
                                                    </span>
                                                        <button type="submit" class="btn btn-primary start">
                                                            <i class="fa fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset" class="btn btn-warning cancel">
                                                            <i class="fa fa-ban"></i>
                                                            <span>Cancel upload</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger delete">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                        <!-- The global file processing state -->
                                                        <span class="fileupload-process"></span>
                                                    </div>
                                                    <!-- The global progress state -->
                                                    <div class="col-md-5 fileupload-progress fade">
                                                        <!-- The global progress bar -->
                                                        <div class="progress progress-striped active" role="progressbar"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar progress-bar-success"
                                                                 style="width:0%;">
                                                            </div>
                                                        </div>
                                                        <!-- The extended global progress state -->
                                                        <div class="progress-extended">&nbsp;</div>
                                                    </div>
                                                </div>
                                        <!-- The table listing the files available for upload/download -->
                                            <table role="presentation" class="table table-striped" hidden="hidden">
                                                <tbody class="files"></tbody>
                                            </table>
                                        </form>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-condensed"
                                                   id="documentTable">
                                                <thead>
                                                <tr>
                                                    <th>Thumbnail</th>
                                                    <th>File Name</th>
                                                    <th>Upload Location</th>
                                                    <th>File Type</th>
                                                    <th>Select</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end #content -->
                            <!-- The blueimp Gallery widget -->
                            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>
                            <!-- begin scroll to top btn -->
                            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
                               data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
                            <!-- end scroll to top btn -->
                        </div>
                    </div><!-- end checklist pills -->
                    <div class="tab-pane fade" id="employee-pill">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">Coming Soon</h4>
                                    </div>
                                    <div class="panel-body">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                            <!-- end #content -->
                            <!-- begin scroll to top btn -->
                            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
                               data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
                            <!-- end scroll to top btn -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="policies-pill">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">Coming Soon</h4>
                                    </div>
                                    <div class="panel-body">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                            <!-- end #content -->
                            <!-- begin scroll to top btn -->
                            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
                               data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
                            <!-- end scroll to top btn -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="processes-pill">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">Coming Soon</h4>
                                    </div>
                                    <div class="panel-body">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                            <!-- end #content -->
                            <!-- begin scroll to top btn -->
                            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
                               data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
                            <!-- end scroll to top btn -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="storeFiles-pill">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">Coming Soon</h4>
                                    </div>
                                    <div class="panel-body">
                                        Coming Soon
                                    </div>
                                </div>
                            </div>
                            <!-- end #content -->
                            <!-- begin scroll to top btn -->
                            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
                               data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
                            <!-- end scroll to top btn -->
                        </div>
                    </div>
                </div><!-- end tab pills -->
            </div>
        </div>
    </div>
@endsection



@section('js_after')
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}

    </script>








    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td class="col-md-1">
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary btn-sm start" disabled>
                            <i class="fa fa-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-white btn-sm cancel">
                            <i class="fa fa-ban"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}



    </script>
    <!-- The template to display files available for download -->
    <script>
        $(document).ready(function () {
            $('#documentTable').dataTable({
                "ajax": {
                    "url": "{{ URL::Route('getAllFilesJson') }}",
                    "type": "POST"
                },
                "columns": [
                    {"data": "thumbnail"},
                    {"data": "fileName"},
                    {"data": "uploadLocation"},
                    {"data": "fileType"},
                    {"data": "Select"}
                ]
            });
        });
        var handleJqueryFileUpload = function () {
            // Initialize the jQuery File Upload widget:
            $('#fileupload').fileupload({
                autoUpload: true,
                disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                maxFileSize: 5000000,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png|pdf)$/i,
                // Uncomment the following to send cross-domain cookies:
                //xhrFields: {withCredentials: true},
            });
            // Enable iframe cross-domain access via redirect option:
            $('#fileupload').fileupload(
                'option',
                'redirect',
                window.location.href.replace(
                    /\/[^\/]*$/,
                    '/cors/result.html?%s'
                )
            );
            // Upload server status check for browsers with CORS support:
            if ($.support.cors) {
                $.ajax({
                    type: 'HEAD'
                }).fail(function () {
                    $('<div class="alert alert-danger"/>').text('Upload server currently unavailable - ' + new Date()).appendTo('#fileupload');
                });
            }
            // Load & display existing files:
            $('#fileupload').addClass('fileupload-processing');
            $.ajax({
                // Uncomment the following to send cross-domain cookies:
                //xhrFields: {withCredentials: true},
                url: "{{ URL::route('postNewFile') }}",
                dataType: 'json',
                context: $('#fileupload')[0]
            }).always(function () {
                $(this).removeClass('fileupload-processing');
            }).done(function (result) {
                $(this).fileupload('option', 'done')
                    .call(this, $.Event('done'), {result: result});
            });
        };
        var FormMultipleUpload = function () {
            "use strict";
            return {
                //main function
                init: function () {
                    handleJqueryFileUpload();
                }
            };
        }();
    </script>
    <script>
        $(document).ready(function () {
            FormMultipleUpload.init();
        });
    </script>
@endsection