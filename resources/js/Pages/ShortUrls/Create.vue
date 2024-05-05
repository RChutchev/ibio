<template>
    <v-button @click="modal = true">Add new Link</v-button>
    <v-dialog-modal max-width="2xl" :show="modal" @close="modal = false">
        <template #title>Add new Link</template>
        <template #content>
            <div class="col-span-6 sm:col-span-3 mt-3">
                <v-label for="destination" value="Destination" />
                <v-input
                    type="text"
                    id="destination"
                    name="destination"
                    v-model="form.destination"
                    :value="form.destination"
                    class="mt-2 w-full"
                />
                <v-input-error :message="form.errors.destination" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-3 mt-3">
                <v-label for="title" value="Title (optional)" />
                <v-input
                    type="text"
                    id="title"
                    name="title"
                    v-model="form.title"
                    :value="form.title"
                    class="mt-2 w-full"
                />
                <v-input-error :message="form.errors.title" class="mt-2" />
            </div>
            <div class="grid grid-cols-2 gap-4  mt-3">
                <div class="col-span-1">
                    <div class="col-span-6 sm:col-span-3">
                        <v-label for="domain" value="Domain" />
                        <v-select
                            id="domain"
                            name="domain"
                            v-model="form.domain"
                            class="mt-2 w-full" disabled
                        >
                            <option class="capitalize" value="">{{ app_url }}</option>
                        </v-select>
                        <v-input-error :message="form.errors.domain" class="mt-2" />
                    </div>
                </div>
                <div class="col-span-1">
                    <v-label for="custom-back-half" value="Custom back-half (optional)" />
                    <v-input
                        type="text"
                        id="custom-back-half"
                        name="keyword"
                        v-model="form.keyword"
                        :value="form.keyword"
                        class="mt-2 w-full"
                    />
                    <v-input-error :message="form.errors.keyword" class="mt-2" />
                </div>
            </div>
            
        </template>
        <template #footer>
            <v-secondary-button @click="modal = false">Cancel</v-secondary-button>
            <v-button
                class="ml-2"
                @click="save"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Save
            </v-button>
        </template>
    </v-dialog-modal>
</template>

<script>
    import VButton from "@/Components/Button";
    import VDialogModal from "@/Components/DialogModal";
    import VDialogForm from "@/Components/DialogForm";
    import VSecondaryButton from "@/Components/SecondaryButton";
    import VLabel from "@/Components/Label";
    import VInput from "@/Components/Input";
    import VInputError from "@/Components/InputError";
    import VSelect from "@/Components/Select.vue";

    export default {
        components: {
            VSelect,
            VInputError,
            VInput,
            VLabel,
            VSecondaryButton,
            VDialogForm,
            VDialogModal,
            VButton,
        },
        data() {
            return {
                modal: false,
                form: this.$inertia.form({
                    title: '',
                    destination: '',
                    keyword: '',
                }),
            };
        },
        methods: {
            save() {
                this.form.post(route("short-urls"), {
                    errorBag: "shortUrls",
                    onSuccess: () => {
                        this.modal = false;
                        window.Emitter.emit("preview.reload", true);
                    },
                });
            },
        },
    };
</script>
