<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Remove margin and padding from the page */
        body, html {
            margin: 0;
            padding: 0;
        }

        /* Define a set of background colors */
        .color-set {
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .color-set-1 {
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .color-set-2 {
            background-color: #cce5ff;
            border-color: #b8daff;
        }
        .color-set-3 {
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        /* Custom tooltip style */
        .custom-tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .docs-info {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            z-index: 1;
        }

    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
            <div class="row-md-4 mb-4">
                <div class="custom-tooltip">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Admin</h5>
                            <p class="card-text">all starts with  https://way2life.000webhostapp.com/api</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">register</h5>
                                            <p class="card-text">/registerAdmin</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                 
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CRUD Operations</h5>
                            <p class="card-text">Perform CRUD operations on the following entities.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set">
                                        <div class="card-body">
                                            <h5 class="card-title">Create</h5>
                                            <p class="card-text">Go to create operation.</p>
                                            <!-- Add comment for create route here -->
                                            <!-- <a href" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-1">
                                        <div class="card-body">
                                            <h5 class="card-title">Read</h5>
                                            <p class="card-text">Go to read operation.</p>
                                            <!-- Add comment for read route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-2">
                                        <div class="card-body">
                                            <h5 class="card-title">Update</h5>
                                            <p class="card-text">Go to update operation.</p>
                                            <!-- Add comment for update route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 color-set-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Delete</h5>
                                            <p class="card-text">Go to delete operation.</p>
                                            <!-- Add comment for delete route here -->
                                            <!-- <a href="" class="btn btn-primary">Go</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="docs-info">
                                <h5>Documentation Title</h5>
                                <p>Documentation description goes here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
