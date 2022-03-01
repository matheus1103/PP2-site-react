import { RefObject, useEffect } from 'react';

export const useOnClickOutside = (ref: RefObject<HTMLDivElement>, handler: (arg0: any) => void) => {
  useEffect(() => {
    const listener = (event: { target: any; }) => {
      if (!ref.current || ref.current.contains(event.target)) {
        return;
      }
      handler(event);
    };
    document.addEventListener('mousedown', listener);
    return () => {
      document.removeEventListener('mousedown', listener);
    };
  },
  [ref, handler],
  );
};