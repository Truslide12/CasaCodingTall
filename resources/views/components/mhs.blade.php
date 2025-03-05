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
                <h1 class="mb-0 pb-0 mt-0 display-4" id="title">MHS America</h1>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    
    <div class="row mb-5">
        <!-- MHS Current Start -->
        <div class="col-6 col-lg-6 mb-1 ">
            <!-- Preview Start -->
            <h2 class="small-title">Current Release</h2>
            <div class="card mb-5">
                <div class="card-img-top">
                    <a href="//mhsamerica.com">
                        <img src="{{secure_asset('/images/MHSAmerica.png')}}" class="card-img-top h-100 scale" alt="card image" />
                    </a>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1"></div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="d-flex flex-column">
                                            <p class="heading">Description</p>
                                            <ul class="list-unstyled">
                                                <li>- Online Mobile Home Sale application</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">Current Functions</p>
                                        <ul class="list-unstyled">
                                            <li>- Post and search for mobile homes for sale that are in communitites</li>
                                            <li>- Allows companies to have multiple locations and assign managers</li>
                                            <li>- Full map functionality showing all search results</li>
                                            <li>- Find communities with open spaces to rent</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                                <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                                <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                    <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                                </div>
                                <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                    <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="h-100">
                                    <div class="d-flex flex-column">
                                        <p class="heading">Known issues at time of hiring</p>
                                        <ul class="list-unstyled">
                                            <li>- Home page banners were all hard-coded</li>
                                            <li>- Thumbnail images did not store properly</li>
                                            <li>- Styling issues throughout the project</li>
                                            <li>- Overly complicated database</li>
                                            <li>- Massive code redundancy</li>
                                            <li>- Confirmation emails not sending</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MHS Current End -->
        <!-- MHS Redesing Start -->
        <div class="col-6 col-lg-6">
            <!-- Preview Start -->
            <h2 class="small-title">Redesign</h2>
            <div class="card mb-5">
                <div class="card-img-top">
                    <a href="//147.182.226.196">
                        <img src="{{secure_asset('/images/MHSAmerica.png')}}" class="card-img-top h-100 scale" alt="card image" />
                    </a>
                </div>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                            <div class="w-100 d-flex sh-1"></div>
                            <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                            </div>
                            <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="h-100">
                                <div class="d-flex flex-column justify-content-start">
                                    <div class="d-flex flex-column">
                                        <p class="heading">Job Scope</p>
                                        <ul class="list-unstyled">
                                            <li>&#10004; Add ability to post mobile homes on private land</li>
                                            <li>- Expand Search funcitons to allow searching for homes on private land vs in community</li>
                                            <li>&#10004;  Add functionality to automatically update the home page banners</li>
                                            <li>&#10004;  Fix thumbnail images did not store properly</li>
                                            <li>&#10004;  Fix styling issues throughout the project</li>
                                            <li>- Simplify and optimize the database</li>
                                            <li>- Clean all code and redundancies</li>
                                            <li>&#10004;  Fix confirmation emails not sending</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                            <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                            </div>
                            <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                            </div>
                            <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="h-100">
                                <div class="d-flex flex-column">
                                    <p class="heading">Status</p>
                                    <ul class="list-unstyled">
                                        <li>- Search function is working correctly. All that remains is getting the map functionality in place</li>
                                        <li>- Simplification of the database and cleaning all code and redundancies are TBD</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                            <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                                <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                            </div>
                            <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                                <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                            </div>
                            <div class="w-100 d-flex h-100 justify-content-center position-relative">
                                <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="h-100">
                                <div class="d-flex flex-column">
                                    <p class="heading">Updates as of 1/30/23</p>
                                    <ul class="list-unstyled">
                                        <li>- Company ran out of money so I'm still working on this in exchange for company ownership</li>
                                        <li>- It has been icechested until I get the full game ranker app completed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table of Contents End -->
        </div>
        <!-- MHS Redesign End -->
    </div>
    <!-- Content End -->
</x-layout>