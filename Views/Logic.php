<?php
/**
 * Mengkoneksikan file index.php
 */
include $_SERVER['DOCUMENT_ROOT'] . "/Logic/index.php";
?>

<!-- Algorithm Sections -->
<div class="row justify-content-center">
    <!-- Showing result of Generate array -->
    <div class="col-auto col-md-8 mb-3">
        <div class="card rounded shadow p-4 text-center">
            <div class="row">
                <div class="col-12">
                    <h5>
                        <i>Array</i>
                    </h5>
                </div>
                <div class="col-12 py-3">
                    <h3>
                        <mark>
                            [
                                <?php 
                                    /**
                                     * getArrays($arr)
                                     * $arr = $newArray 
                                     */
                                    getArrays($newArray);
                                ?>
                            ]
                        </mark>
                    </h3>
                </div>
                <div class="col">
                    <span class="text-secondary">
                        <small>
                            <i class="bi bi-info-circle-fill"></i> Refresh borwser to get new array
                        </small>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-auto col-md-8">
        <div class="card rounded shadow p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="sort-tab" data-bs-toggle="tab" data-bs-target="#sort" type="button" role="tab" aria-controls="sort" aria-selected="true">Sorting</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="search-tab" data-bs-toggle="tab" data-bs-target="#search" type="button" role="tab" aria-controls="search" aria-selected="false">Searching</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Sorting Tab -->
                <div class="tab-pane fade show active" id="sort" role="tabpanel" aria-labelledby="sort-tab">
                    <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-selection-tab" data-bs-toggle="pill" data-bs-target="#pills-selection" type="button" role="tab" aria-controls="pills-selection" aria-selected="true">Selection</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-bubble-tab" data-bs-toggle="pill" data-bs-target="#pills-bubble" type="button" role="tab" aria-controls="pills-bubble" aria-selected="false">Bubble</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-merge-tab" data-bs-toggle="pill" data-bs-target="#pills-merge" type="button" role="tab" aria-controls="pills-merge" aria-selected="false">Merge</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-quick-tab" data-bs-toggle="pill" data-bs-target="#pills-quick" type="button" role="tab" aria-controls="pills-quick" aria-selected="false">Quick</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-insertion-tab" data-bs-toggle="pill" data-bs-target="#pills-insertion" type="button" role="tab" aria-controls="pills-insertion" aria-selected="false">Insertion</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-selection" role="tabpanel" aria-labelledby="pills-selection-tab">
                            
                        </div>
                        <div class="tab-pane fade" id="pills-bubble" role="tabpanel" aria-labelledby="pills-bubble-tab">2</div>
                        <div class="tab-pane fade" id="pills-merge" role="tabpanel" aria-labelledby="pills-merge-tab">3</div>
                        <div class="tab-pane fade" id="pills-quick" role="tabpanel" aria-labelledby="pills-quick-tab">4</div>
                        <div class="tab-pane fade show active" id="pills-insertion" role="tabpanel" aria-labelledby="pills-insertion-tab">
                            <?php
                                /**
                                 * insertionSort($arr)
                                 * $arr = $newArray
                                 */
                                insertionSort($newArray);
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Searching Tab -->
                <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                    <ul class="nav nav-pills my-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-linear-tab" data-bs-toggle="pill" data-bs-target="#pills-linear" type="button" role="tab" aria-controls="pills-linear" aria-selected="true">Linear</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-binary-tab" data-bs-toggle="pill" data-bs-target="#pills-binary" type="button" role="tab" aria-controls="pills-binary" aria-selected="false">Binary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-straitmaxmin-tab" data-bs-toggle="pill" data-bs-target="#pills-straitmaxmin" type="button" role="tab" aria-controls="pills-straitmaxmin" aria-selected="false">Strait MAXMIN</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dc-tab" data-bs-toggle="pill" data-bs-target="#pills-dc" type="button" role="tab" aria-controls="pills-dc" aria-selected="false">D&C</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-linear" role="tabpanel" aria-labelledby="pills-linear-tab">
                            <?php
                                /**
                                 * linearSearch($arr)
                                 * $arr = $newArray
                                 */
                                $search = $newArray[2];
                                linearSearch($search, $newArray);
                            ?>
                        </div>
                        <div class="tab-pane fade" id="pills-binary" role="tabpanel" aria-labelledby="pills-binary-tab">
                            <?php
                                /**
                                 * binarySearch($arr)
                                 * $arr = $newArray
                                 */
                                $search = $newArray[2];
                                binarySearch($search, $newArray);
                            ?>
                        </div>
                        <div class="tab-pane fade" id="pills-straitmaxmin" role="tabpanel" aria-labelledby="pills-straitmaxmin-tab">3</div>
                        <div class="tab-pane fade" id="pills-dc" role="tabpanel" aria-labelledby="pills-dc-tab">4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * Buttons Back to Home
 */ 
include $_SERVER['DOCUMENT_ROOT'] . "/Parts/Button.php";
?>