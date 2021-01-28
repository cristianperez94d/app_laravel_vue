<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm justify-content-center">
                <li class="page-item" :class="{'disabled': !prevPage}">
                    <inertia-link class="page-link" aria-label="Previous" :href="route(url, {page:prevPage})">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </inertia-link>
                </li>
                <li class="page-item" :class="{'active': data.current_page === numPage}" v-for="numPage of numPages" :key="numPage.index">
                    <inertia-link class="page-link" :href="route(url, {page:numPage})">{{numPage}}</inertia-link>
                </li>
                <li class="page-item" :class="{'disabled': !nextPage}">
                    <inertia-link class="page-link" aria-label="Next" :href="route(url, {page:nextPage})">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </inertia-link>
                </li>
            </ul>
        </nav>                
    </div>    
</template>

<script>
    export default {
        props: {
            data: Object,
            url: String,
        },
        data() {
            return {
                dataPaginate: {
                    current_page: this.data.current_page,
                    last_page: this.data.last_page,
                    total: this.data.total,
                },
                offset:2,
            }
        },
        computed:{
            prevPage(){
                return this.dataPaginate.current_page ? this.dataPaginate.current_page-1 : 0
            },
            nextPage(){      
                return this.dataPaginate.current_page && this.dataPaginate.last_page > this.dataPaginate.current_page ? this.dataPaginate.current_page+1 : 0
            },
            numPages(){
                if(!this.dataPaginate.total){
                    return [];
                }
                
                let from = this.dataPaginate.current_page - this.offset;
                if(from < 1){
                    from = 1;
                }

                let to = from + (this.offset*2);
                if(to >= this.dataPaginate.last_page){
                    to = this.dataPaginate.last_page
                }

                let pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from ++;
                }

                return pagesArray;

            }
        },
    }
</script>
