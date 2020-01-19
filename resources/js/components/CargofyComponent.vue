<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Додати</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Додати перевезення</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/" method="post">
                                <div class="form-group">
                                        <input v-model="form.date" type="date" name="date"
                                               placeholder="Дата"
                                               class="form-control">
                                </div>
                                <div class="form-group">
                                    <input v-model="form.from" type="text" name="from"
                                           placeholder="Звідки"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input v-model="form.to" type="text" name="to"
                                           placeholder="Куди"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input v-model="form.name" type="text" name="name"
                                           placeholder="Назва"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input v-model="form.weight" type="number" min="0" name="weight"
                                           placeholder="Вага"
                                           class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Підтердити</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    date: '',
                    from: '',
                    to: '',
                    name: '',
                    weight: '',
                })
            }
        },
        mounted(){
            console.log('Component mounted.')
        }
    }
</script>
