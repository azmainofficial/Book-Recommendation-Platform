@extends('layouts.master')

@section('title', 'Explore Categories')

@section('content')
<section id="book-category" class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Book Category</h2>
        <div class="button-group mb-4" id="filter-buttons">
            <button data-filter="all" class="btn btn-sm btn-outline-primary active m-1">All</button>
            @foreach(range('A', 'Z') as $char)
                <button data-filter="{{ $char }}" class="btn btn-sm btn-outline-primary m-1">{{ $char }}</button>
            @endforeach
        </div>

        <div id="categories" class="d-flex flex-wrap gap-2">
            @foreach($allCategories as $category)
                @php
                    $firstChar = strtoupper(substr($category->name, 0, 1));
                @endphp
                <a href="{{ route('category', $category->slug) }}" class="category btn btn-outline-secondary {{ $firstChar }}" data-char="{{ $firstChar }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <button id="find-button" class="btn btn-primary mt-4">Find Selected</button>
    </div>
</section>

<style>
    .category.selected {
        background-color: #FF512F;
        border-color: #e74929;
        color: white;
    }
    .hidden {
        display: none !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('#filter-buttons button');
        const categories = document.querySelectorAll('.category');
        const findButton = document.getElementById('find-button');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');

                filterButtons.forEach(btn => btn.classList.remove('active', 'btn-primary'));
                filterButtons.forEach(btn => btn.classList.add('btn-outline-primary'));
                button.classList.add('active', 'btn-primary');
                button.classList.remove('btn-outline-primary');

                categories.forEach(category => {
                    if (filter === 'all' || category.dataset.char === filter) {
                        category.classList.remove('hidden');
                    } else {
                        category.classList.add('hidden');
                    }
                });
            });
        });

        categories.forEach(category => {
            category.addEventListener('click', (e) => {
                // If we want to allow multiple selection for "Find", we might prevent default.
                // But usually, clicking a category should just navigate.
                // Let's keep the reference logic for "selection" if needed.
                // e.preventDefault();
                // category.classList.toggle('selected');
            });
        });

        findButton.addEventListener('click', () => {
            const selectedCategories = Array.from(categories)
                .filter(category => category.classList.contains('selected'))
                .map(category => category.textContent.trim());

            if(selectedCategories.length > 0) {
                alert('Selected Categories: ' + selectedCategories.join(', '));
            } else {
                alert('Please select categories first (click to toggle selection if enabled)');
            }
        });
    });
</script>
@endsection
