@php
    $html_tag_data = [];
    $title = 'CasaCoding Development';
    $heading = 'CasaCoding Development';
    $description= 'CasaCoding Development portfolio page and customer portal.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

<x-layout class="container">
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 mt-0 display-4" id="title">Contact</h1>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Recommended Courses Start -->
    <div class="col-xl-6 mb-5">
        <h2 class="small-title">Contact</h2>
        <div class="card w-100 sh-50 sh-md-40 h-xl-100-card hover-img-scale-up position-relative">
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1" class="mb-1">Email</label>
                        <input type="text" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1" class="mb-1">Message</label>
                        <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Recommended Courses End -->
</x-layout>