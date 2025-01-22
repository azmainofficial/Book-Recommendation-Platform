<template>
    <section id="book-category">
    <h2>Book Category</h2>
    
    <!-- Filter Buttons -->
    <div class="button-group" id="filter-buttons">
      <button 
        v-for="filter in filters" 
        :key="filter" 
        :data-filter="filter" 
        :class="{ active: activeFilter === filter }" 
        @click="setFilter(filter)"
      >
        {{ filter }}
      </button>
    </div>

    <!-- Categories -->
    <div id="categories">
      <a 
        v-for="category in filteredCategories" 
        :key="category.label" 
        href="#" 
        :class="['category', category.group, { selected: selectedCategories.includes(category.label) }]" 
        @click.prevent="toggleCategory(category.label)"
      >
        {{ category.label }}
      </a>
    </div>

    <!-- Find Button -->
    <button id="find-button" class="btn mt-3" @click="findSelectedCategories">Find</button>
  </section>
</template>

<script>
export default {
  data() {
    return {
      filters: ['all', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
      categories: [
        { label: 'Art', group: 'A' },
        { label: 'Astronomy', group: 'A' },
        { label: 'Biography', group: 'B' },
        { label: 'Business', group: 'B' },
        { label: 'Computing', group: 'C' },
        { label: 'Chemistry', group: 'C' },
        { label: 'Design', group: 'D' },
        { label: 'Education', group: 'E' },
        { label: 'Fiction', group: 'F' },
        { label: 'Geography', group: 'G' },
        { label: 'History', group: 'H' },
        { label: 'Information Technology', group: 'I' },
        { label: 'Journalism', group: 'J' },
        { label: 'Knowledge', group: 'K' },
        { label: 'Literature', group: 'L' },
        { label: 'Mathematics', group: 'M' },
        { label: 'Networking', group: 'N' },
        { label: 'Oceanography', group: 'O' },
        { label: 'Philosophy', group: 'P' },
        { label: 'Quantum Physics', group: 'Q' },
        { label: 'Robotics', group: 'R' },
        { label: 'Science', group: 'S' },
        { label: 'Technology', group: 'T' },
        { label: 'Urban Studies', group: 'U' },
        { label: 'Visual Arts', group: 'V' },
        { label: 'World History', group: 'W' },
        { label: 'Xenobiology', group: 'X' },
        { label: 'Youth Studies', group: 'Y' },
        { label: 'Zoology', group: 'Z' },
        { label: 'Anthropology', group: 'A' },
        { label: 'Botany', group: 'B' },
        { label: 'Cryptography', group: 'C' },
        { label: 'Drama', group: 'D' },
        { label: 'Ecology', group: 'E' },
        { label: 'Finance', group: 'F' },
        { label: 'Genetics', group: 'G' },
        { label: 'Horticulture', group: 'H' },
        { label: 'Industrial Design', group: 'I' },
        { label: 'Jurisprudence', group: 'J' },
        { label: 'Kinetics', group: 'K' },
        { label: 'Linguistics', group: 'L' },
        { label: 'Meteorology', group: 'M' },
        { label: 'Neurology', group: 'N' },
        { label: 'Ornithology', group: 'O' },
        { label: 'Psychology', group: 'P' },
        { label: 'Quality Management', group: 'Q' },
        { label: 'Religion', group: 'R' },
        { label: 'Sociology', group: 'S' },
        { label: 'Theater', group: 'T' },
        { label: 'Urban Planning', group: 'U' },
        { label: 'Veterinary Science', group: 'V' },
        { label: 'Writing', group: 'W' },
        { label: 'X-ray Technology', group: 'X' },
        { label: 'Yoga Studies', group: 'Y' },
        { label: 'Zoological Studies', group: 'Z' }
      ],
      activeFilter: 'all',
      selectedCategories: []
    };
  },
  computed: {
    filteredCategories() {
      // Show categories based on the active filter
      if (this.activeFilter === 'all') {
        return this.categories;
      }
      return this.categories.filter(category => category.group === this.activeFilter);
    }
  },
  methods: {
    setFilter(filter) {
      this.activeFilter = filter;
    },
    toggleCategory(label) {
      if (this.selectedCategories.includes(label)) {
        this.selectedCategories = this.selectedCategories.filter(category => category !== label);
      } else {
        this.selectedCategories.push(label);
      }
    },
    findSelectedCategories() {
      alert('Selected Categories: ' + this.selectedCategories.join(', '));
    }
  }
};
</script>

<style scoped>
h2 {
    font-size: 30px;
    padding-bottom: 10px;
}

.category {
    display: inline-block;
    margin: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    color: black;
    font-size: 15px;
}

.category.selected {
    background-color: #FF512F;
    border-color: #e74929;
    color: white;
}

.hidden {
    display: none;
}

.button-group {
    margin-bottom: 10px;
}

.button-group button {
    margin: 2px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    background-color: #f4f4f4;
    cursor: pointer;
    font-size: 15px;
}

.button-group button.active {
    background-color: #FF512F;
    color: white;
    border-color: #e74929;
}
</style>