import jsCookie from "js-cookie"
export default {
    auth (to, from, next) {
        const token= jsCookie.get ("sistema_tdc_token")
    
        if (!token) {
            next ("/login")
        }
        next () 
    }
}