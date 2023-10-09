<div class="w-full bg-primary-2 p-5 text-white">
    <x-user.user-logo type="footer"/>
    <div class="my-10 border border-t-white"></div>
    <div class="flex flex-col">
        <div class="text-2xl font-bold px-4">
            Contact Us
        </div>
        <div class="flex">
            {{-- todo change phone number later --}}
            <div class="left flex-1 flex flex-col gap-y-3 p-4">
                <div class="flex flex-col gap-y-1 text-sm">
                    <label for="name" class="text-white">
                        Your Name
                    </label>
                    <input id="name-api" name="name" type="text" class="text-primary-1 p-2 rounded-lg">
                </div>
                <div class="flex flex-col gap-y-1 text-sm">
                    <label for="message" class="text-white">
                        Your Message
                    </label>
                    <textarea id="message-api" name="message" id="message" cols="30" rows="10" class="text-primary-1 p-2 rounded-lg"></textarea>
                </div>
                <a href="https://api.whatsapp.com/send/?phone=12345678910&text=" id="submit-api">
                    <x-button type="button" text="Send Message" :primary=false />
                </a>
            </div>
            <div class="right flex flex-col flex-1 p-4">
                <div class="top flex flex-1">
                    <div class="left flex flex-1">
                        <div class="text-md font-bold">
                            Pages
                        </div>
                    </div>
                    <div class="right flex flex-col flex-1 gap-y-2">
                        <div class="text-md font-bold">
                            Social
                        </div>
                        <div class="logos flex gap-4">
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </div>
                </div>
                <div class="bottom flex flex-1">
                    <div class="left flex flex-1">
                        <div class="text-md font-bold">
                            Phone
                        </div>
                    </div>
                    <div class="right flex flex-1">
                        <div class="text-md font-bold">
                            Address
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let name = document.querySelector("#name-api")
    let message = document.querySelector("#message-api")
    let submit = document.querySelector("#submit-api")
    let phone = `6281936471433`

    let getText = (name, message)=>{
        let text = `Hello, im ${name} \n ${message}`

        return text
    }

    function change(text){
        let links = `https://api.whatsapp.com/send/?phone=${phone}&text=`
        links += text

        submit.setAttribute("href", links)
    }

    name.addEventListener("change", ()=>{
        change(getText(name.value, message.value))
    })

    message.addEventListener("change", ()=>{
        change(getText(name.value, message.value))
    })
</script>
