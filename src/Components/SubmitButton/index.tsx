import './style.css'
import { ButtonHTMLAttributes } from 'react'

interface SubmitButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
    label:string
}

export function SubmitButton({
    label,
    ...rest
}: SubmitButtonProps){
    return(
        <button className="button-container" {...rest}>{label}</button>
    )
}



