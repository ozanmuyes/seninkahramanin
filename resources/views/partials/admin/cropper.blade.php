<?php
    if (!isset($label)) {
        $label = "Image";
    }

    if (!isset($name)) {
        $name = "image";
    }

    if (!isset($placeholder)) {
        $placeholder = "img/image-cropper-placeholder.jpg";
    }

    if (!isset($uploadButtonText)) {
        $uploadButtonText = "Upload Image";
    }

    if (!isset($aspectRatio)) {
        $aspectRatio = 1;
    }

    if (!isset($autoCropArea)) {
        $autoCropArea = 0.8;
    }

    if (!isset($rotatable)) {
        $rotatable = false;
    }

    if (!isset($showPreview)) {
        $showPreview = false;
    }

    if (!isset($formSelector)) {
        $formSelector = "form";
    }
?>

@if ($label !== true)
    {!! Form::label("image-input", $label) !!}
@endif

{!! Form::file("image-input", ["id" => "image-input", "accept" => "image/jpeg,image/png,image/gif", "class" => "sr-only"]) !!}

<div class="form-group">
    {!! Form::button($uploadButtonText, ["id" => "image-upload-button", "class" => "btn btn-primary"]) !!}

    @if ($rotatable)
        {!! Form::button("90&deg; Sola Döndür", ["id" => "image-rotate-left", "class" => "btn btn-default", "disabled" => "disabled"]) !!}
        {!! Form::button("90&deg; Sağa Döndür", ["id" => "image-rotate-right", "class" => "btn btn-default", "disabled" => "disabled"]) !!}
    @endif
</div>

<div class="image-container">
    {!! Html::image($placeholder, null, ["id" => "image", "class" => "img-responsive"]) !!}
</div>

@if ($showPreview === true)
@endif

{!! Form::hidden($name) !!}

@section("styles")
    @parent

    {!! Html::style("css/partials/admin/cropper.min.css") !!}
@endsection

@section("scripts")
    @parent

    {!! Html::script("js/partials/admin/cropper.min.js") !!}

    <script>
        $("#image-rotate-left").prop("disabled", "disabled");
        $("#image-rotate-right").prop("disabled", "disabled");

        // Cropper

            var $form = $("{{ $formSelector }}"),
                $image = $(".image-container > #image"),
                $imageInput = $("#image-input"),
                $imageHidden = $("input[type='hidden'][name='image']");

            $image.cropper({
                aspectRatio: {{ $aspectRatio }},
                preview: ".image-preview",
                autoCropArea: {{ $autoCropArea }}
            });

            // Simulate input button click

                $("#image-upload-button").on("click", function (e) {
                    e.preventDefault();

                    $imageInput.trigger("click");
                });

            // Method bindings to buttons

                $("#image-rotate-left").on("click", function () {
                    $image.cropper("rotate", -90);
                });

                $("#image-rotate-right").on("click", function () {
                    $image.cropper("rotate", 90);
                });

            // Import image

                var URL = window.URL || window.webkitURL,
                    blobURL;

                if (URL) {
                    $imageInput.change(function () {
                        var files = this.files,
                            file;

                        if (!$image.data("cropper")) {
                            return;
                        }

                        if (files && files.length) {
                            file = files[0];

                            if (/^image\/\w+$/.test(file.type)) {
                                blobURL = URL.createObjectURL(file);

                                $image.one("built.cropper", function () {
                                    URL.revokeObjectURL(blobURL); // Revoke when load complete
                                }).cropper("reset").cropper("replace", blobURL);

                                $imageInput.val("");
                                $("#image-rotate-left").prop("disabled", false);
                                $("#image-rotate-right").prop("disabled", false);
                            } else {
                                showMessage("Please choose an image file.");
                            }
                        }
                    });
                } else {
                    $imageInput.parent().remove();
                }

            // Form

                $("input[type='reset']").on("click", function (e) {
                    // Reset Cropper
                    {!! '$image.cropper("replace", "' . $placeholder . '")' !!};

                    // Since Cropper reset, disable the rotate buttons
                    $("#image-rotate-left").prop("disabled", "disabled");
                    $("#image-rotate-right").prop("disabled", "disabled");
                });

                $form.submit(function () {
                    // Convert Cropper image canvas to data URL and assign it to proper input element's value
                    //
                    var imageType = "image/jpeg",
                        imageQuality = 0.9,
                        $imageDataURL = $image.cropper('getCroppedCanvas').toDataURL(imageType, imageQuality);

                    $imageHidden.val($imageDataURL);

                    // Remove unnecessary input elements
                    //
                    $imageInput.remove();

                    return true;
                });
    </script>
@endsection