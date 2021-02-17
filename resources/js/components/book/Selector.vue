<template>
    <ul class="sidebar-menu pl-3 pr-3">
        <li class="sidebar-menu-item">

            <select v-model="book" name="book" id="book" class="form-control">
                <option value="0" disabled>Please Select</option>
                <option v-for="(book,bookIndex) in BookData" :key="book.id" :value="book.id">{{ book.title }}</option>
            </select>

        </li>
    </ul>
</template>

<script>
import axios from "axios";

export default {
    name: "Selector",
    data() {
        return {
            BookData: [],
            book: ''
        };
    },
    mounted() {
        axios.get("/books")
            .then(response => {
                this.BookData = response.data;
                this.book = 0;
            })
            .catch(err => {
                this.BookData.name = '???';
            })
    }
};
</script>

