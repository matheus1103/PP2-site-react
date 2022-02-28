import './style.css'

type CategoryProps = {
    text: string,
    color:string
}

export function Category(props:CategoryProps){
    return(
        <div style={{background:props.color}} className='category'>{props.text}</div>
    )
}