import { Category } from "../Category"
import './style.css'
type Category = {
    color: string,
    title: string
}

type JobBoxProps = {
    title: string;
    categories: Category[]
}

export function Job_box(props: JobBoxProps){
    return(
        <div className='job'>
        <h3>{props.title}</h3>
        <div className='categorys'>
            {props.categories.map(item=>(
                <Category color={item.color} text={item.title}/>
            ))}
        </div>
    </div>
    )
}