/**
 * ConnpassAPIを使用するときに用いるリクエストパラメータ
 */
export interface ConnpassApiParams {
    keyword:string;
    year:string;
    month:string;
    start:string;
    count:string;
}