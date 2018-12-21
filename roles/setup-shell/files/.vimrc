" vim: filetype=vim

" Use Vim settings, rather than Vi settings (much better!).
" This must be first, because it changes other options as a side effect.
set nocompatible

" Enable modelines, for setting file types within a file
set modeline

" Switch syntax highlighting on, when the terminal has colors
" Also switch on highlighting the last used search pattern.
if &t_Co > 2
  syntax on
  set hlsearch
endif

" Change the color of comments
highlight Comment ctermfg=blue

" Change the color of Search results (and currently selected, IncSearch)
highlight Search ctermbg=Yellow ctermfg=Black
highlight IncSearch ctermbg=Black ctermfg=Red

" Always display the filename
set ls=2

" Set a useful description line at the bottom of vim
set statusline=%F%m%h%w\ %y%=%3c%4V\ %5l/%L\ \ \ %P

" Increase the size of the copy/paste registers
" X,<Y,sZ,h means remember X files, up to Y lines or Z KB, h=highlight
set viminfo='100,<5000,s500,h

" Set the encoding to utf-8 to allow many more non-ascii characters
set encoding=utf-8

" Add a middle dot to identify trailing spaces
set list listchars=trail:·
highlight SpecialKey ctermfg=DarkBlue

" In many terminal emulators the mouse works just fine, thus enable it.
" Selecting text enters visual mode, so either figure out how to NOT enter
" visual mode or use d=cut, y=copy (doesn't work if -xterm_clipboard)
if has('mouse')
  set mouse=n
endif
map <S-RightMouse> <Nop>

" Show line numbers in vim (set nonumber to hide them)
set number
" Create an easy toggle (l-key) for line numbers
nnoremap <silent>l :set number!<cr>

" Use spaces instead of a tab character
set expandtab
" Set tabs to be 4 spaces long
set tabstop=4
" Use Shift+Tab to insert a regular tab
inoremap <S-Tab> <C-V><Tab>

" Toggle between visible and invisible whitespace characters (t-key)
nmap <silent>t :set invlist<cr>

" Make sure at least 4 lines of text are visible underneath cursor
set scrolloff=3

" Momentarily show matching brace when you close a brace
set showmatch

" Allow the cursor to go anywhere (even if there aren't characters there)
" Empty space will be filled with spaces if you enter text in these areas
set virtualedit=all

" When editing a file, always jump to the last known cursor position.
if has("autocmd")
    au BufReadPost * if line("'\"") > 1 && line("'\"") <= line("$") | exe "normal! g'\"" | endif
endif

" Make the spacebar enter a mode where text can easily be copied via terminal
noremap <Space> :call ToggleMouse() <CR>
function! ToggleMouse()
    set number!
    if &mouse == 'n'
        set mouse=
        echo "Entering copy mode"
    else
        set mouse=n
        echo "Exiting copy mode"
    endif
endfunction

" Enable persistent_undo (if supported), which saves changes to a global
" undofile that can be used to undo changes even after restarting vim.
if has('persistent_undo')
  if !isdirectory($HOME."/.vim")
    call mkdir($HOME."/.vim", "", 0770)
  endif
  if !isdirectory($HOME."/.vim/undo")
    call mkdir($HOME."/.vim/undo", "", 0700)
  endif
  set undofile
  set undodir=$HOME/.vim/undo
endif
