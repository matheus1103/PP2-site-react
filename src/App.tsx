import { useState } from "react"
import { Tweet } from "./Components/Tweet"

import './App.css'
import { AppRoutes } from "./Routes"

function App() {
  /*const [tweets, setTweets] = useState<string[]>([
    'Tweet 1',
    'Tweet 2',
    'Tweet 3',
    'Tweet 4',
  ])

  function createTweet(){
    setTweets([...tweets,'Tweet 5'])
  }
*/
  return(
   <AppRoutes />
    /* <div>
      {tweets.map(tweet => {
        return <Tweet text={tweet}/>
      })}
      <button onClick={createTweet}>Adicionar Tweet</button>
    </div>*/
  )
}

export default App
