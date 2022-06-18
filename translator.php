<?php

/* 
 * The MIT License
 *
 * Copyright 2014 s4if.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
session_start();
if(empty($_POST['kode'])){
    if(empty($_POST['param'])){
        header('location:public/'.$_POST['url'].'/'.$_POST['param']);
    }  else {
        header('location:public/'.$_POST['url'].'/'.$_POST['param'].'/'.$_POST['param2']);
    }
}elseif ($_POST['kode'] === 'siswa'){
    $kelas = (empty($_POST['kelas']))?'empty':$_POST['kelas'];
    $jurusan = (empty($_POST['jurusan']))?'empty':$_POST['jurusan'];
    $paralel = (empty($_POST['paralel']))?'empty':$_POST['paralel'];
    header('location:public/'.$_POST['url'].'/'.$kelas.'-'.$jurusan.'-'.$paralel);
}